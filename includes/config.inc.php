<?php
    $wnd_title = array(
        'title'=>'The Hugo Awards',
        'motto'=>'A non-official practice site for the Hugo Awards'
    );

    $headerpic = array(
		'img-source'=>'HugoHeader.jpg',
		'img-alt'=>'logo'
	);

    $footer = array(
        'copyright'=>'Copyright '.date('Y').'.',
        'company'=>'Ádám Várhegyi-Miłoś (Y1JE9I)',
        'original'=>'https://www.thehugoawards.org/'
    );

    $PICFOLDER = './gallery/';
	$FORMATS = array('jpg', 'png');
	$ALLOWED_PICTYPES = array('image/jpeg', 'image/png', 'image/svg');
	$DATEFORMAT = "d/m/Y. H:i";
	$MAXPICSIZE = 1024*1024;

    $pages = array(
		'/'=>array('file'=>'home', 'text'=>'Home'),
		'about'=>array('file'=>'about', 'text'=>'About'),
        'awards'=>array('file'=>'awards', 'text'=>'The Awards'),
        'submissions'=>array('file'=>'submissions', 'text'=>'Submissions'),
        'hugos'=>array('file'=>'hugos', 'text'=>'Current/Past Hugos'),
        'contactform'=>array('file'=>'contactform', 'text'=>'Contact Us'),
        'yourmsg'=>array('file'=>'yourmsg', 'text'=>'Your Message'),
        'gallery'=>array('file'=>'gallery', 'text'=>'Gallery')
	);

	$error_page = array('file'=>'404','text'=>'A keresett oldal nem található');

	$search = null;
?>