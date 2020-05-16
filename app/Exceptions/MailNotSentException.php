<?php
 
namespace App\Exceptions;
 
use Exception;
 
class CustomException extends Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
    }
 
    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return $request;
        return Redirect::back()->with('success','Order Added but email not sent. Edit and resend email!');
    }
}