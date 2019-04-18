<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Interactive extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function intr()
	{
		security();
		$this->load->view('admin/interactive');
    }
    public function index()
	{
		security();

		$code=$_GET["lang"];
		switch ($code) {
			case "html":
				$data = array(
					'lang' => "HTML",
					'code' => "html",
					'mode' => 'mode:"application/x-httpd-php",',
					'default' => '<html>\n\t<body>\n\t<p>Hello World</p>\n\t</body>\n</html>'
				);
				break;
			case "js":
				$data = array(
					'lang' => "Java Script",
					'code' => "js",
					'mode' =>  'mode:"text/javascript",',
					'default' => 'console.log("Hello World")'
				);
				break;
			case "java":
				$data = array(
					'lang' => "Java",
					'code' => "java",
					'mode' => 'mode:"text/x-java",',
					'default' => 'public class main {\n\tpublic static void main(String[] args) {\n\t\tSystem.out.println("Hello, World");\n\t\t}\n}'
				);
				break;
			case "py":
				//$mode = array('name'=> "python","version"=> 3,"singleLineStringErrors"=>false);
				$data = array(
					'lang' => "Python",
					'code' => "py",
					'mode' => 'mode:{name: "python",version: 3,singleLineStringErrors: false},',
					'default' => 'print "Hello", "how are you?" '
				);
				break;
			case "php":
				$data = array(
					'lang' => "PHP",
					'code' => "php",
					'mode' => 'mode:"application/x-httpd-php",',
					'default' => '<?php \n\techo "hello world"; \n?>'
				);
				break;
		}
		$this->load->view('admin/interactiveEditor',$data);
	}

	public function compile()
	{
		check_login();
		$code=$_POST["code"];
		$editor=$_POST["editor"];

		$status="ERROR";
		$output="";

		switch ($code) {
			case "js":
				chdir('fInteractive');
				$myfile = fopen("main.js", "w") or die("Unable to open file!");
				$txt = $editor;
				fwrite($myfile, $txt);

				$status = 'OK';
				$output=shell_exec("node main.js");

				break;

			case "java":

					chdir('fInteractive');
					$myfile = fopen("main.java", "w") or die("Unable to open file!");
					$txt = $editor;
					fwrite($myfile, $txt);

					$status = 'OK';
					$output=shell_exec("java main");

					fclose($myfile);
				break;

			case "py":
				chdir('fInteractive');
				$myfile = fopen("main.py", "w") or die("Unable to open file!");
				$txt = $editor;
				fwrite($myfile, $txt);

				$status = 'OK';
				$output=shell_exec("python main.py");

				fclose($myfile);
				break;

			case "php":
				chdir('fInteractive');
				$myfile = fopen("main.php", "w") or die("Unable to open file!");
				$txt = $editor;
				fwrite($myfile, $txt);

				$status = 'OK';
				$output=shell_exec("php main.php");

				fclose($myfile);
				break;
		}

		$data =  array('status' => $status,
						'output'=>"<pre>".$output."</pre>",
						'csrfName' => $this->security->get_csrf_token_name(),
                		'csrfHash' => $this->security->get_csrf_hash()
						);

		// set text compatible IE7, IE8
		header('Content-type: text/plain');
		// set json non IE
		header('Content-type: application/json');

		echo json_encode($data); exit;
	}
}
