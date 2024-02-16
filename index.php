<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 100%;
            height: 100vh;
            display: inline-block;
            align-items: center;
            background-color: plum;
        }
        .container h1{
            display: flex;
            padding: 15px 32px;
            align-items: center;
        }
      
        .container .left{
            color: #fff;
            font-weight: 600;
            font-size: 35px;
            font-family: 'Poppins',sans-serif;
        }
        .container .right{
            color: #fff;
            margin-top: 15px;
            display: flex;
            align-items: center;
            padding: 12px;
            font-size: 20px;
        }
        .container .right .input-data{
            margin: 12px;
            border-style: none;
            font-size: 26px;
            border-radius: 10px;
            font-weight: 300;
            padding: 15px 32px;
        }
        .container .right .btn{
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            background-color: #04AA6D;
        }
        
        .container .right .select-style{
            border: none;
            background-color: #fff;
            padding: 15px 32px;
            text-align: center;
            font-weight: 200px;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px; 
        }
        .add-form-group-showdata{
            font-size: 50px;
            font-weight: 800;
            margin: 20px 0 30px;
            padding-left: 42px;
        }
    </style>
</head>
<body>
    <div class="container"><form method="POST"> 
        <div class="left">
            <h1>Calculator</h1>
        </div>
        <div class="right">
                <input type="text" name="num1" class ="input-data">
                <input type ="text" name="num2" class="input-data">
                <div class="select-style">
                    <select name="operation">
                        <option value="add">ADD</option>
                        <option value="sub">SUB</option>
                        <option value="mul">MUL</option>
                        <option value="div">DIV</option>
                    </select>
                </div><div>
                <button class = "btn" name="submit">Submit</button>
                </div>
        </div>
        </form>
        <div class="add-form-group-showdata">
            <p>
            <?php 
                if(isset($_POST['submit'])){
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operation = $_POST['operation'] ;               
                    switch($operation){
                        case 'add': $sum = $num1 + $num2;
                        echo "The addition of two number is {$sum}";
                        break;
                        case 'sub': $sub = $num1 - $num2;
                        echo "The substraction of two number is {$sub}";
                        break;
                        case 'mul': $mul = $num1 * $num2;
                        echo "The multiplication of two number is {$mul}";
                        break;
                        case 'div': $div = $num1 / $num2;
                        echo "The division of two number is {$div}";
                        break; 
                    }
                }
            ?>
          </p>
        </div>
    </div>
</body>
</html>