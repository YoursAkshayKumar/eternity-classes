<?php

namespace App\Http\Controllers\FrontControllers;

use App\Models\Admin;
use App\Models\Applicant;
use App\Models\ApplicationStatus;
use App\Models\NewsletterSubscription;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends WebAppBaseController
{

    public function home()
    {
        try {
            return view('front.pages.home', []);
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }

    public function home2()
    {
        try {
            return view('front.pages.home2', []);
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }
   
    public function about()
    {
        try {
            return view('front.pages.about', []);
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }

    public function courses()
    {
        try {
            return view('front.pages.courses', []);
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }

    public function contact()
    {
        try {
            return view('front.pages.contact', []);
        } catch (\Exception $ex) {
            return $this->sendError($ex->getMessage(), $ex->getTrace(), 500);
        }
    }

    public function subscribeNewsletter(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|max:255',
            ]);

            if ($validator->fails()) {
                return $this->sendError('Validation Error', $validator->errors(), 422);
            }

            $email = $request->input('email');

            // Check if email already exists
            $existing = NewsletterSubscription::where('email', $email)->first();
            
            if ($existing) {
                if ($existing->status == 0) {
                    // Reactivate subscription
                    $existing->update([
                        'status' => 1,
                        'subscribed_at' => now(),
                    ]);
                    return $this->sendResponse([], 'Thank you for resubscribing to our newsletter!');
                }
                return $this->sendError('This email is already subscribed to our newsletter.', [], 400);
            }

            // Create new subscription
            NewsletterSubscription::create([
                'email' => $email,
                'status' => 1,
                'subscribed_at' => now(),
            ]);

            return $this->sendResponse([], 'Thank you for subscribing to our newsletter!');
        } catch (\Exception $ex) {
            return $this->sendError('Something went wrong. Please try again later.', $ex->getTrace(), 500);
        }
    }

    public function submitEnrollment(Request $request)
    {
        try {
            $niceNames = array(
                'fname' => 'Full Name',
                'email' => 'Email Address',
                'phone' => 'Phone Number',
                'course' => 'Course',
                'terms' => 'Terms & Conditions',
            );

            $validator = Validator::make($request->all(), [
                'fname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'course' => 'required|string|max:255',
                'terms' => 'required',
            ], [], $niceNames);

            if ($validator->fails()) {
                return $this->sendError('Validation Error', $validator->errors(), 422);
            }

            $data = [
                'full_name' => $request->input('fname'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'course' => $request->input('course'),
                'grade' => $request->input('Grade', null),
                'source' => $request->input('source', null),
                'terms_accepted' => $request->has('terms') ? true : false,
            ];

            $objEnrollment = new Enrollment();
            $enrollmentId = $objEnrollment->insertRec($data);

            return $this->sendResponse(['enrollment_id' => $enrollmentId], 'Thank you for your enrollment! We will contact you soon.');
        } catch (\Exception $ex) {
            return $this->sendError('Something went wrong. Please try again later.', $ex->getTrace(), 500);
        }
    }




    //Home Controller
}
