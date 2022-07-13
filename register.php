<!DOCTYPE
    html>
<html
    lang="en">

<head>
    <meta
        charset="UTF-8">
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>
        Document
    </title>
    <style>
    * {
        text-align: center;
    }

    p {
        padding-bottom: 10px;
        /* padding-left: 12rem; */

    }

    h1 {
        padding-bottom: 2rem;
        padding-top: 2rem;
    }

    label {
        /* padding-right:2rem; */
    }
    </style>
   
</head>

<body>
    <h1>Register
        Form
    </h1>
    <form name="myForm" action="config.php" method="GET" onsubmit="return validateForm()">
    <p>

        <label
            for="userName">UserName</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        <input
            type="text"
            name="userName"
            id="userName"
            placeholder="userName"
            required="required">
    </p>

    <p>

        <label
            for="email">email</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        <input
            type="text"
            name="email"
            id="email"
            placeholder="email"
            required="required">
    </p>
    <p>

        <label
            for="password">password</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        <input
            type="password"
            name="psw"
            id="password"
            placeholder="password"
            required="required">
    </p>
    <p>

        <label
            for="confirmPassword">confirmPassword</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        <input
            type="password"
            name="confirmPassword"
            id="confirmPassword"
            placeholder="confirmPassword"
            required="required">

    </p>
    <a
        href="index.php">already
        a
        user</a>
    <p>
        <input
            type="submit"
            value="Register"
            name="Register">
    </p>
    </form>

</body>

</html>