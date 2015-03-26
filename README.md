Implement a set of classes based on the following interfaces that will execute the code below.

Make sure you add appropriate error handling, exception handling, logging, and assertions as

appropriate. Your implementation should reflect best practices, layers of abstraction, code

reuse, good object­oriented principles, and suitable design patterns.

interface DiceInterface

{

public function roll();

}

interface DiceContainerInterface

{

public function attach(DiceInterface $die);

public function getTotal();

}

Implement all of the classes that allow you to write the following code:

$container = new MyDice();

$container­>attach(new D10()); // 10­sided die

$container­>attach(new D8()); // 8­sided die

$container­>attach(new D6()); // 6­sided die

$container­>attach(new D4()); // 6­sided die

$container­>attach(new AnyDie([0, 0, 1, 2, 3, 3])); // A die with arbitrary faces

$total = $container­>getTotal();

echo "Total of all dice: $total\n";

