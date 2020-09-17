// public function addItenImage(Request $request)  //item gallary uploads
    // {
    //     $photos = $request->file('files');

    //     $destinationPath = ITEM_IMG_PATH;
    //     for ($i = 0; $i < count($photos); $i++) {
    //         $photo = $photos[$i];
    //         //$name = sha1(date('YmdHis') . microtime());
    //         $name = preg_replace('/[^a-zA-Z0-9_.]/', '_', $photo->getClientOriginalName()).'_'.$i;

    //         $image_name = $name . '.' . $photo->getClientOriginalExtension();
    //         $photo->move($destinationPath, $image_name);

    //         $user_id = Auth::user()->id;
    //         $itemData = DB::table('tbl_item_gallery')->insert([
    //             'item_id' => $request->item_id,
    //             'img_name' => $image_name,
    //             'alt_tag' => $photo->getClientOriginalName(),
    //             'created_by' => $user_id,
    //         ]);


    //     }
    //     $defaultImg = DB::table('tbl_item_gallery')->where('item_id', $request->item_id)->first();
    //     DB::table('tbl_item_gallery')->where('item_id', $request->item_id)->where('id', $defaultImg->id)
    //     ->update(['default'=> 1]);

    //     return Response::json([
    //         'message' => 'Image saved Successfully'
    //     ], 200);
    // }