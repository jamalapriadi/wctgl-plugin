<?php 

 //register all our custom shortcodes on init
 add_action('init','wctgl_register_shortcode');

 //register all our custom shortcode here
 function wctgl_register_shortcode(){
    add_shortcode('wctgl_form_peserta','wctgl_form');
 }

 function wctgl_form($args, $title = "")
 {
    //setup output
    $output = '';

    if(strlen($title)):
        $output .= '<div class="form-title">'.wpautop($title).'</div>';
    endif;

    $output .= '
        <div class="wctgl">
            <form id="wctgl_form" name="wctgl_form" class="wctgl_form" method="post">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" placeholder="Nama Anda">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" placeholder="ex. jamal.apriadi@gmail.com">
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
    ';

    return $output;
 }