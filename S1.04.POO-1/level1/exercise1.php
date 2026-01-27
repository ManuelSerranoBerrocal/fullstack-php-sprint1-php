<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Level 1 - Ejercicio 1: Empleado</title>
    <link rel="stylesheet" href="../public/styles.css">
    
</head>
<body>
    <div class="container">
        <p><a href="../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php 
        require_once 'Employee.php'; 
        echo "<h2>Nivel 1 - Ejercicio 1: Empleado</h2>";

        $emp1 = new Employee("Mercedes", 9000);
        $emp2 = new Employee("Moroni", 5000);
        $emp3 = new Employee("Manuel", 999000);
        
        $emp1->displayTaxStatus();
        $emp2->displayTaxStatus();
        $emp3->displayTaxStatus();
        ?> 
    </div> 
</body>
</html>
