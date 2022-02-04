
<?php
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
     function ima ($image,$request){

   $file= "";
                     if($request->hasFile('image'))
                    {
                        // $file= $request->file('image');
                        $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('/uploads', $file);
                     }
                    return $file;
                }

