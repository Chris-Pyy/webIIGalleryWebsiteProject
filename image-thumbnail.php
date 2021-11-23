<?php


class ImageThumbnail {

    private $image; 

    public function __construct($image) {
        $this->image = $image;
    }

    public function createElement() {
        $fontSize = '14';
        $titleLength = strlen($this->image['Title']);
         

        // if the title is longer than 25 characters, reduce the font size. If it is longer than 34 characters, reduce it further.
        if ($titleLength >= 24) {
            $fontSize = '12';
        }
        if ($titleLength >= 34) {
            $fontSize = '11';
        }


        return '<div class="card col s3 hoverable">
        <div class="card-image">
        <img src="https://res.cloudinary.com/taylor-amy/image/upload/c_scale,h_75,w_75/v1633386733/web%202%20asg%201/'. $this->image['Path'] .'">
        </div>

        <div class="card-action" >
          <a href="/single-photo.php?id='. $this->image["ImageID"] .'" style="font-size: ' . $fontSize. 'px;">'.$this->image['Title'].'</a>
        </div>
        </div>';
    }




}



