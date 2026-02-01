
<?php 
class Test
{
    public function __construct()
    {
        echo "Object created\n";
    }

    public function __destruct()
    {
        echo "Object destroyed\n";
    }
}

echo "Start \n";
$obj = new Test();
echo "Middle \n";
unset($obj);
echo "End\n";
