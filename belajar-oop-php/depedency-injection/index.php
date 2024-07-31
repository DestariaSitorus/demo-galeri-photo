<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Depedency Injection</title>
    <!-- Depedency Injection : ketergantungan data yang di masukkan atau disuntikkan  -->
</head>
<body>
    <?php
        class User {
            // properti global
            public $nama;
            public $email;

            public static $users = [];

            public function __construct ($nama = null, $email = null){
               $this->nama = $nama;
               $this->email = $email;
            }

            public static function create(array $data){
                $user = new self($data['nama'], $data['email']);
                self:: $users[] = $user;
                return $user;
           
            }

            public static function all (){ // mengambil semua data user
            return self::$users;
            }

        }

        class Request {
            protected $data;

            public function __construct (array $data){
                $this->data = $data;
            }

            public function validate (array $rules) { // kegunaan vaklidasi adalah 
                $errors = [];
                foreach ($rules as $field => $rule){
                    if ($rule == 'required' && empty ($this->data[$field])){
                        $errors[] = "The $field field is required.";// field wajib diisi jika tidak akan error
                    }
                }
            
            if (!empty($errors)){
                throw new Exception(implode(", ", $errors)); // jika error tidak kosonggg lempar sesuatu
            }
            return $this->data;// daerah sudah aman 

        }
        public function input($key, $default = null){//default = kalau tidak ada key nya maka yang ditampilkan null
            return $this->data[$key] ?? $default;
            }
        }

        class UserController {
            public function store(Request $request){
                $validated = $request->validate([
                    'nama' => 'required',
                    'email'=> 'required',
                ]);
                // opsi pertama
                // User ::create($validated);
                // opsi kedua
                User::create([
                    'nama'  => $request->input('nama'),
                    'email' => $request->input('email'),
                ]);
            }

        public function viewUsers(){
            $users = User::all();
            echo "<h1>Users List</h1>";
            echo "<ul>";
            foreach ($users as $user){
                echo "<li>Name: " . htmlspecialchars($user->nama). ",Email:". htmlspecialchars($user->email) . "</li>";

            }
            echo "</ul>";
        }
        }
        try {
            
        }
        
    ?>
    
</body>
</html>