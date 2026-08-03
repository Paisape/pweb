<?php
/**
 * PHPMailer SPL autoloader.
 * PHP Version 5
 * @package PHPMailer
 * @link https://github.com/PHPMailer/PHPMailer/ The PHPMailer GitHub project
 * @author Marcus Bointon (Synchro/coolbru) <phpmailer@synchromedia.co.uk>
 * @author Jim Jagielski (jimjag) <jimjag@gmail.com>
 * @author Andy Prevost (codeworxtech) <codeworxtech@users.sourceforge.net>
 * @author Brent R. Matzelle (original founder)
 * @copyright 2012 - 2014 Marcus Bointon
 * @copyright 2010 - 2012 Jim Jagielski
 * @copyright 2004 - 2009 Andy Prevost
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 * @note This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * PHPMailer SPL autoloader.
 * @param string $classname The name of the class to load
 */
function PHPMailerAutoload($classname)
{
    //Can't use __DIR__ as it's only in PHP 5.3+
    $filename = dirname(__FILE__).DIRECTORY_SEPARATOR.'class.'.strtolower($classname).'.php';
    if (is_readable($filename)) {
        require $filename;
    }
}

if (version_compare(PHP_VERSION, '5.1.2', '>=')) {
    //SPL autoloading was introduced in PHP 5.1.2
    if (version_compare(PHP_VERSION, '5.3.0', '>=')) {
        spl_autoload_register('PHPMailerAutoload', true, true);
    } else {
        spl_autoload_register('PHPMailerAutoload');
    }
} else {
    /**
     * Fall back to traditional autoload for old PHP versions
     * @param string $classname The name of the class to load
     */
   function my_autoloader($class) {
        include 'classes/' . $class . '.class.php';
    }

    spl_autoload_register('my_autoloader');

    // Or, using an anonymous function as of PHP 5.3.0
    spl_autoload_register(function ($class) {
        include 'classes/' . $class . '.class.php';
    });
    {
       
require_once '../PHPMailer-master/PHPMailerAutoload.php';

if(isset($_POST['icon'])){


    $m = new PHPMailer();
    $m->isSMTP();
    $m->SMTPAuth = true;

    $m->Host = 'smtp.gmail.com';
    $m->Username = '*********@gmail.com';
    $m->Password = '****';
    $m->SMTPSecure = 'ssl';
    $m->Port = 465;

    $m->isHTML(true);

    $m->Subject = 'Contact form submitted';
    $m->Body = $_POST['icon'];

    $m->FromName = 'Contact';

    $m->AddAddress('********@gmail.com','***Name Here****');

    if($m->send()) {
        header('Location: contact_thanks.php');
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $m->ErrorInfo;
        die();  
    } else {
        'Sorry, could not send email';
    }

} else {'something went wrong';}

    }
}
