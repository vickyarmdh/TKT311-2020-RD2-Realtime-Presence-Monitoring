public function saveImage(Request $request)
{
    $image = Image::make($request->get('imgBase64'));
    $image->save('public/bar.jpg');
}