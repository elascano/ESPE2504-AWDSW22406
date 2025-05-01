<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComputerDb</title>
</head>
<body>

   
    <form method="post" id="eventForm">
        <H1>COMPUTER REGISTRATION</H1>
        <H3>enter the CPU specs <br>here!</H3><br>
        
        <table>
            <tr>
                <td><label >Processor:</label></td>
                <td><input type="text" id="processor" name="processor" ></td>
            </tr>
            <tr>
                <td><label >MotherBoard:</label></td>
                <td><input type="text"  name="motherBoard" ></td>
            </tr>
            <tr>
                <td><label >RAM</label>:</label></td>
                <td><input type="text"  name="ram" ></td>
            </tr>
            <tr>
                <td><label >GPU:</label></td>
                <td><input type="text"  name="gpu" ></td>
            </tr>
            <tr>
                <td><label >Power Supply:</label></td>
                <td><input type="text"  name="powerSuply" ></td>
            </tr>
            
            <tr>
                <td><label >Refrigeration System:</label></td>
                <td>
                    <select name="refrigerationSystem" >
                        <option value="yes">Yes </option>
                        <option value="no">No</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td><label >RGB:</label></td>
                <td>
                    <select name="rgb" >
                        <option value="yes">Yes </option>
                        <option value="no">No</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td><label >Case:</label></td>
                <td><input type="text"  name="case" ></td>
            </tr>
           
            <tr>
                <td><label for=>Entry Date:</label></td>
                <td><input type="date"  name="entryDate" ></td>
            </tr>
            <tr>
                <td><label >Price:</label></td>
                <td><input type="number"  name="price" ></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="registerPC" value="ACCEPT">
                </td>
            </tr>
        </table>
   </form>
   <?php
     include("register.php")
   ?>
    
</body>
</html>