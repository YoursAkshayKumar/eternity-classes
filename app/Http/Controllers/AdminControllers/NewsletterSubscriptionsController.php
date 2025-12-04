<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterSubscriptionsController extends WebAppBaseController
{

    public function listNewsletterSubscriptions()
    {
        return view('admin.pages.newsletter.newsletter-list', []);
    }

    public function loadNewsletterList(Request $request)
    {
        $data = [];
        try {
            $data = $request->all();
            $projectionData = array();
            $params['draw'] = isset($data['draw']) ? $data['draw'] : 1;
            $start = isset($data['start']) ? $data['start'] : 0;
            $length = isset($data['length']) ? $data['length'] : 10;
            
            $orderByCol = 'subscribed_at';
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

            $objNewsletter = new NewsletterSubscription();
            $recordsTotal = $objNewsletter->getCount($frmData);

            $countResult = $objNewsletter->ajaxNewsletterList($length, $start, $frmData, true);
            $recordsFiltered = !empty($countResult) && isset($countResult[0]->NewsletterCount) ? $countResult[0]->NewsletterCount : 0;
            $projectionData = $objNewsletter->ajaxNewsletterList($length, $start, $frmData, false, $orderInfo);

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

    public function updateNewsletterStatus(Request $request)
    {
        try {
            $niceNames = array(
                'id' => 'Subscription ID',
                'status' => 'Status',
            );

            $validate = Validator::make($request->all(), [
                'id' => 'required|exists:newsletter_subscriptions,id',
                'status' => 'required|in:0,1',
            ], [], $niceNames);

            if ($validate->fails()) {
                return $this->sendErrorJson('', $validate->getMessageBag()->first());
            }

            $objNewsletter = new NewsletterSubscription();
            $newsletter = $objNewsletter->getRec($request->id);

            if (!$newsletter) {
                return $this->sendErrorJson('', 'Newsletter subscription not found');
            }

            $objNewsletter->updateStatus($request->id, $request->status);

            $statusText = $request->status == 1 ? 'Active' : 'Inactive';
            return $this->sendResponse(array(
                'newsletter' => $request->id
            ), 'Newsletter subscription status updated to ' . $statusText . ' successfully!', '/newsletter-subscriptions');
        } catch (\Exception $ex) {
            return $this->sendErrorJson('', $ex->getMessage());
        }
    }

    public function deleteNewsletterSubscription($id)
    {
        try {
            $obj = new NewsletterSubscription();
            $update = $obj->remove($id);

            return $this->sendResponse('', 'Newsletter subscription deleted successfully.', '/newsletter-subscriptions');
            
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }
}

