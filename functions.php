<?php 
    function addUser($conn, $username, $password) {
        $sql = "SELECT * FROM user_account WHERE username=?"; // should be the correct table name

        // accesses the database
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username]);

        // if username does not exist, then create the account
        if($stmt->rowCount()==0) {
            $sql = "INSERT INTO user_account (username,password) VALUES (?,?)"; // should be the correct table name
            $stmt = $conn->prepare($sql);
            return $stmt->execute([$username, $password]);
        }
    }

    function login($conn, $username, $password) {
        $query = "SELECT * FROM user_account WHERE username=?"; // should be the correct table name

        // accesses the database
        $stmt = $conn->prepare($query);
        $stmt->execute([$username]);

        // if username does exist, then proceed with the password verification
        if($stmt->rowCount() == 1) {
            // returns account info
            $row = $stmt->fetch();

            // store account info as session variable
            $_SESSION['userInfo'] = $row;

            // get values from the session variable
            $uid = $row['user_id'];
            $uname = $row['username'];
            $passHash = $row['password'];

            // validate password
            if(password_verify($password, $passHash)) {
                $_SESSION['user_id'] = $uid;
                $_SESSION['username'] = $uname;
                return true;
            }
            else {
                return false;
            }
        }
    }
?>