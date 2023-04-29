<!DOCTYPE html>
<html lang="en">
<style>
    *{
        box-sizing: border-box;
    }
    body{
        font-family: 'Kaisei Tokumin', serif;
        margin: 15px 30px;
        font-size: 15px;
        padding: 20px;
    }
    .container{
        background-color:rgb(137, 167, 167);
        padding: 20px 50px 50px ;
        border: 2px solid rgb(2, 70, 70);
        border-radius: 20px;
    }    
    input[type = "text"]{
        width: 100%;
        padding: 10px;
        border: 2px solid rgb(102, 24, 167);
        border-radius: 5px;
        margin: 10px;
    }
    input[type = "submit"]{
    background-color: rgb(80, 80, 80);
    color: aliceblue;
    font-size: 30px;
    padding: 10px;
    border: none;
    border-radius: 10px ;
    border-end-end-radius: 20px;
    border-top-left-radius: 20px;
    cursor: pointer;
    width: 100%;   
}
    .MainHeading{
        background-color: rgb(255, 133, 25);
        text-align: center;
        color: rgb(0, 0, 0);
        font-size: 40px;
    }
</style>
<head>
    <meta charset="UTF-8">
    <title> From </title>
</head>
<body>
    <div class="container">
        <form action="form.php" method="GET">
            <h1 class="MainHeading"> Theme Park Regitration:</h1>
            <h2>Contact Information</h2>
            <br>
            <div>  
                <label>Park Code *</label>
                <input type="text" required="" name="Park_code" placeholder="Park code">
            </div>
            <div>
                <label>Park Name *</label>
                <input type="text" required="" name="Park_name" placeholder="Park Name">
            </div>
            <br>
            <div>  
                <label>Park City *</label>
                <input type="text" required="" name="Park_city" placeholder="Park City">
            </div>
            <br>
            <div>  
                <label>Park Country</label>
                <input type="text" required="" name="Park_country" placeholder="Park Country">
            </div>
            <div>  
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>   
    </div>
</body>
</html>