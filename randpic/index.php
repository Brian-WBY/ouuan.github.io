<span class="hljs-keyword">glob</span>(“./*.{gif,jpg,png}”,GLOB_BRACE);
 $img = array_rand($img_array);
 header(“location:$img_array[$img]”);
 ?&gt;
