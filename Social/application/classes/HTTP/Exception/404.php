<?php defined('SYSPATH') or die('No direct script access.');

/* class Exceptionhandler
{
    public static function handle(Exception $e)
    {
        var_dump('privet');
        switch (get_class($e))
        {
            case 'HTTP_Exception_404':
                $response = new Response;
                $response->status(404);
                $view = new View('404exception');
                $view->message = $e->getMessage();
                echo $response->body($view)->send_headers()->body();
                return TRUE;
                break;
            default:
                return Kohana_Exception::handler($e);
                break;
        }
    }
}
*/

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {

    /**
     * Generate a Response for the 404 Exception.
     *
     * The user should be shown a nice 404 page.
     *
     * @return Response
     */
    public function get_response()
    {
        $view = View::factory('404exception');

        // Remembering that `$this` is an instance of HTTP_Exception_404
        $view->message = $this->getMessage();

        $response = Response::factory()
            ->status(404)
            ->body($view->render());

        return $response;
    }
}