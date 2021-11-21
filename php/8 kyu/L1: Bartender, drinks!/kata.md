# [Task:](codewars.com/r/O6VWvA)
Complete the function that receives as input a string, and produces outputs according to the following table:

| Input | Output |
| -- | -- |
| "Jabroni" | "Patron Tequila" |
| "School Counselor" | "Anything with Alcohol" |
| "Programmer" | "Hipster Craft Beer" |
| "Bike Gang Member" | "Moonshine" |
| "Politician" | "Your tax dollars" |
| "Rapper" | "Cristal" |
| anything else | "Beer" |

Note: anything else is the default case: if the input to the function is not any of the values in the table, then the return value should be "Beer".

Make sure you cover the cases where certain words do not show up with correct capitalization. For example, the input `"pOLitiCIaN"` should still return `"Your tax dollars"`.

## Sample Tests:

```

class GetDrinkByProfessionTest extends TestCase {
  public function testFixed() {
    $this->assertEquals("Patron Tequila", get_drink_by_profession("jabrOni"), "'Jabroni' should map to 'Patron Tequila'");
    $this->assertEquals("Anything with Alcohol", get_drink_by_profession("scHOOl counselor"), "'School Counselor' should map to 'Anything with alcohol'");
    $this->assertEquals("Hipster Craft Beer", get_drink_by_profession("prOgramMer"), "'Programmer' should map to 'Hipster Craft Beer'");
    $this->assertEquals("Moonshine", get_drink_by_profession("bike ganG member"), "'Bike Gang Member' should map to 'Moonshine'");
    $this->assertEquals("Your tax dollars", get_drink_by_profession("poLiTiCian"), "'Politician' should map to 'Your tax dollars'");
    $this->assertEquals("Cristal", get_drink_by_profession("rapper"), "'Rapper' should map to 'Cristal'");
    $this->assertEquals("Beer", get_drink_by_profession("pundit"), "'Pundit' should map to 'Beer'");
    $this->assertEquals("Beer", get_drink_by_profession("Pug"), "'Pug' should map to 'Beer'");
  }
}

```

  

## Starting point:

```

function get_drink_by_profession(string $s): string {
  // Your code here
}

```