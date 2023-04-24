<?php
include('Model/Model.php');
class Controller extends Model
{
    public function __construct()
    {
        parent::__construct();
        $host = $_SERVER['SERVER_NAME'];
        $url = $_SERVER['PHP_SELF'];
        $urlarray = explode("/", $url);
        $folderpath = "/" . $urlarray[1] . "/" . $urlarray[2];
        $GLOBALS['baseurl'] = "http://" . $host . $folderpath . "/";

    }
    public function create()
    {
        include('View/create.php');
        if (isset($_REQUEST['submit'])) {
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $insertarray = [
                "name" => $name,
                "email" => $email,
                "password" => $password
            ];
            $this->insert("users", $insertarray); // call
            header("Location:" . $GLOBALS['baseurl'] . "index");
        }
    }
    public function index()
    {
        $data = $this->select("users"); //call
        include('View/index.php');
    }
    public function home()
    {
        include('View/home.php');
    }
    public function edit()
    {
        if (isset($_REQUEST['id'])) {
            $uid = $_REQUEST['id'];
            $where = ['uid' => $uid];
            $data = $this->select_where("users", $where);
            include('View/create.php');
            if (isset($_REQUEST['submit'])) {
                $name = $_REQUEST['name'];
                $email = $_REQUEST['email'];
                $password = $_REQUEST['password'];
                $updatearray = [
                    "name" => $name,
                    "email" => $email,
                    "password" => $password,
                ];
                $this->update_data("users", $updatearray, $where); //call
                header("Location:" . $GLOBALS['baseurl'] . "index");
            }
        }
    }
    public function delete()
    {
        if (isset($_REQUEST['id'])) {
            $uid = $_REQUEST['id'];
            $where = ['uid' => $uid];
            $this->delete_data("users", $where); //call
            header("Location:" . $GLOBALS['baseurl'] . "index");
        }
    }
    public function country()
    {
        $data = file_get_contents("http://country.io/names.json");
        //echo "<pre>";
        $api = json_decode($data);
        foreach ($api as $key => $value) {
            $this->insert("country", ["ccode" => $key, "cname" => $value]);
        }

    }
    public function getdataapi()
    {
        $data = $this->select("users");
        print_r($api = json_encode($data));

    }
    public function createapi()
    {
        if (isset($_REQUEST['name'])) {
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $insertarray = [
                "name" => $name,
                "email" => $email,
                "password" => $password
            ];
            if ($this->insert("users", $insertarray)) {
                echo json_encode(["msg" => "Insert Success"]);
            } else {
                echo json_encode(["msg" => "Insert Fail"]);
            }
        }

    }
    public function update_api()
    {
        if (isset($_REQUEST['id'])) {
            $uid = $_REQUEST['id'];
            $where = ['uid' => $uid];
            $data = $this->select_where("users", $where);
            print_r($api = json_encode($data));
            if (isset($_REQUEST['name'])) {
                $name = $_REQUEST['name'] ? $_REQUEST['name'] : $data->name;
                $email = $_REQUEST['email'] ? $_REQUEST['email'] : $data->email;
                $password = $_REQUEST['password'] ? $_REQUEST['password'] : $data->password;
                $updatearray = [
                    "name" => $name,
                    "email" => $email,
                    "password" => $password,
                ];
                if ($this->update_data("users", $updatearray, $where)) {
                    echo json_encode(["msg" => "Update Success"]);
                } else {
                    echo json_encode(["msg" => "Update Fail"]);
                }
            }

        }
    }
    public function delete_api()
    {
        if (isset($_REQUEST['id'])) {
            $uid = $_REQUEST['id'];
            $where = ['uid' => $uid];
            if ($this->delete_data("users", $where)) {
                echo json_encode(["msg" => "Delete Success"]);
            } else {
                echo json_encode(["msg" => "Delete Fail"]);
            }

        }
    }
    public function form()
    {
        include('View/form.php');
        if (isset($_REQUEST['first_name']) || isset($_REQUEST['submit'])) {
            $first_name = $_REQUEST['first_name'];
            $last_name = $_REQUEST['last_name'];
            $address = $_REQUEST['address'];
            $city = $_REQUEST['city'];
            $contact = $_REQUEST['contact'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $image = $_FILES['image']['name'];
            

            // if ($first_name == '') {
            //     return json_encode(['msg' => 'first name required']);
            // }
            $insertarray = [
                "first_name" => $first_name,
                "last_name" => $last_name,
                "address" => $address,
                "city" => $city,
                "contact" => $contact,
                "email" => $email,
                "password" => $password,
                "image" => $image
            ];
            move_uploaded_file($_FILES['image']['tmp_name'], "Controller/image/" . $_FILES['image']['name']);
            if ($this->insert("form", $insertarray)) {
                echo json_encode(["msg" => "Insert Success"]);
            } else {
                echo json_encode(["msg" => "Insert Fail"]);
            }

        }
    }
    public function login()
    {
        include('View/login.php');
        if (isset($_REQUEST['username']) || isset($_REQUEST['submit'])) {
            $username = $_REQUEST['username'];
            $login_password = $_REQUEST['login_password'];
            $insertarray = [
                "username" => $username,
                "login_password" => $login_password
            ];
            if ($this->insert("login", $insertarray)) {
                echo json_encode(["msg" => "Insert Success"]);
            } else {
                echo json_encode(["msg" => "Insert Fail"]);
            }

        }
    }


}

?>