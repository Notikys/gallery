<?php
    $picsom = 'https://picsum.photos/list';
foreach (array_slice(json_decode($picsom, true), 0, 9) as $key => $value) {
    $images[] = [
        'url' => $value['post_url'] . '/download',
        'thumbnail' => $value['post_url'] . '/download',
        'description' => $value['author'],
        'width' => $value['width'],
        'height' => $value['height']
    ];
}

    /*array(
        'url' => 'https://source.unsplash.com/eWFdaPRFjwE/1500x1000',
        'name' => 'Second image',
        'width' => '1500px',
        'height' => '1000px',
    );

    array(
        'url' => 'https://source.unsplash.com/i2KibvLYjqk/1500x1000',
        'name' => 'Third image',
        'width' => '1500px',
        'height' => '1000px',
    );
    array(
        'url' => 'https://source.unsplash.com/RFgO9B_OR4g/1500x1000"',
        'name' => 'Forth image',
        'width' => '1500px',
        'height' => '1000px',
    );
    array(
        'url' => 'https://source.unsplash.com/7bwQXzbF6KE/1500x1000',
        'name' => 'Fifth image',
        'width' => '1500px',
        'height' => '1000px',
    );
    array(
        'url' => 'https://source.unsplash.com/NhU0nUR7920/1500x1000',
        'name' => 'Sixth image',
        'width' => '1500px',
        'height' => '1000px',
    );
    array(
        'url' => 'https://source.unsplash.com/random/1500x1000',
        'name' => 'Seventh image',
        'width' => '1500px',
        'height' => '1000px',
    );
    array(
        'url' => 'https://source.unsplash.com/random/1500x1000',
        'name' => 'Eight image',
        'width' => '1500px',
        'height' => '1000px',
    );
    array(
        'url' => 'https://source.unsplash.com/random/1500x1000',
        'name' => 'Ninth image',
        'width' => '1500px',
        'height' => '1000px',
    );*/
