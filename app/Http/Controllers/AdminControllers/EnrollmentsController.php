<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EnrollmentsController extends WebAppBaseController
{

    public function listEnrollments()
    {
        return view('admin.pages.enrollments.enrollments-list', []);
    }

    public function loadEnrollmentList(Request $request)
    {
        $data = [];
        try {
            $data = $request->all();
            $projectionData = array();
            $params['draw'] = isset($data['draw']) ? $data['draw'] : 1;
            $start = isset($data['start']) ? $data['start'] : 0;
            $length = isset($data['length']) ? $data['length'] : 10;
            
            $orderByCol = 'created_on';
            $orderByDir = 'desc';
            if (isset($data['order'][0]['column']) && isset($data["columns"][$data['order'][0]['column']]["name"])) {
                $orderByColNo = $data['order'][0]['column'];
                $orderByCol = $data["columns"][$orderByColNo]["name"];
                $orderByDir = isset($data['order'][0]['dir']) ? $data['order'][0]['dir'] : 'desc';
            }

            $orderInfo = array(
                'orderByCol' => $orderByCol,
                'orderByDir' => $orderByDir
            );

            $frmData = array();
            if (isset($data['frmData']) && !empty($data['frmData'])) {
                parse_str($data['frmData'], $frmData);
            }

            $objEnrollment = new Enrollment();
            $recordsTotal = $objEnrollment->getCount($frmData);

            $countResult = $objEnrollment->ajaxEnrollmentList($length, $start, $frmData, true);
            $recordsFiltered = !empty($countResult) && isset($countResult[0]->EnrollmentCount) ? $countResult[0]->EnrollmentCount : 0;
            $projectionData = $objEnrollment->ajaxEnrollmentList($length, $start, $frmData, false, $orderInfo);

            $jsonData = array(
                "draw" => intval($params['draw']),
                "recordsTotal" => intval($recordsTotal),
                "recordsFiltered" => intval($recordsFiltered),
                "data" => $projectionData
            );

            return $jsonData;

        } catch (\Exception $ex) {
            // Return DataTables compatible error format
            return response()->json([
                "draw" => isset($data['draw']) ? intval($data['draw']) : 0,
                "recordsTotal" => 0,
                "recordsFiltered" => 0,
                "data" => [],
                "error" => $ex->getMessage()
            ], 200);
        }
    }

    public function viewEnrollmentDetails($id)
    {
        try {
            $objEnrollment = new Enrollment();
            $enrollment = $objEnrollment->getRec($id);

            if (!$enrollment) {
                return redirect()->to(env('ADMIN_URL_PREFIX') . '/enrollments')->with('error', 'Enrollment not found');
            }

            return view('admin.pages.enrollments.enrollment-details', [
                'enrollment' => $enrollment,
            ]);
        } catch (\Exception $ex) {
            return redirect()->to(env('ADMIN_URL_PREFIX') . '/enrollments')->withInput()->with('error', $ex->getMessage());
        }
    }

    public function updateEnrollmentStatus(Request $request)
    {
        try {
            $niceNames = array(
                'id' => 'Enrollment ID',
                'status' => 'Status',
            );

            $validate = Validator::make($request->all(), [
                'id' => 'required|exists:enrollments,id',
                'status' => 'required|in:0,1,2',
            ], [], $niceNames);

            if ($validate->fails()) {
                return $this->sendErrorJson('', $validate->getMessageBag()->first());
            }

            $objEnrollment = new Enrollment();
            $enrollment = $objEnrollment->getRec($request->id);

            if (!$enrollment) {
                return $this->sendErrorJson('', 'Enrollment not found');
            }

            $data = $request->all();
            $data['id'] = $objEnrollment->updateRec($data);

            $statusText = ['Pending', 'Approved', 'Rejected'][$request->status];
            return $this->sendResponse(array(
                'enrollment' => $data['id']
            ), 'Enrollment status updated to ' . $statusText . ' successfully!', '/enrollments');
        } catch (\Exception $ex) {
            return $this->sendErrorJson('', $ex->getMessage());
        }
    }

    public function updateEnrollmentNotes(Request $request)
    {
        try {
            $niceNames = array(
                'id' => 'Enrollment ID',
                'admin_notes' => 'Admin Notes',
            );

            $validate = Validator::make($request->all(), [
                'id' => 'required|exists:enrollments,id',
                'admin_notes' => 'nullable|string|max:1000',
            ], [], $niceNames);

            if ($validate->fails()) {
                return $this->sendErrorJson('', $validate->getMessageBag()->first());
            }

            $objEnrollment = new Enrollment();
            $enrollment = $objEnrollment->getRec($request->id);

            if (!$enrollment) {
                return $this->sendErrorJson('', 'Enrollment not found');
            }

            $data = $request->all();
            $data['id'] = $objEnrollment->updateRec($data);

            return $this->sendResponse(array(
                'enrollment' => $data['id']
            ), 'Admin notes updated successfully!', '/enrollments');
        } catch (\Exception $ex) {
            return $this->sendErrorJson('', $ex->getMessage());
        }
    }

    public function deleteEnrollment($id)
    {
        try {
            $obj = new Enrollment();
            $update = $obj->remove($id);

            return $this->sendResponse('', 'Enrollment Deleted Successfully.', '/enrollments');
            
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }
}

