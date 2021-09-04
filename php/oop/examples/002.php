<?php

class Person
{
    public function __construct(protected string $name) {}

    public function name(): string
    {
        return $this->name;
    }
}


class IdentifiedPerson extends Person
{
    public function __construct(private PersonalIdentifier $id, string $name)
    {
        parent::__construct($name);
    }

    public function id(): PersonalIdentifier
    {
        return $this->id;
    }
}


class PersonalIdentifier
{
    public function __construct(private string $value)
    {
        
    }
    public function value(): string
    {
        return $this->value;
    }
}



interface RegisterOffice
{
    public function register(Person $person): PersonalIdentifier;

    public function changeName(PersonalIdentifier $id, string $newName): void;
}

interface IdentifierFactory
{
    public function create(): PersonalIdentifier;
}


class RandomIdentifierFactory implements IdentifierFactory
{
    public function create(): PersonalIdentifier
    {
        return new PersonalIdentifier((string) mt_rand(100, 1000) . chr(mt_rand(98, 150)));
    }
}


class PersonNotFound extends Exception
{

}


// class UuidIdentifierFactory implements IdentifierFactory
// {
//     public function create(): PersonalIdentifier
//     {

//     }
// }


# DI -> Dependency Injection
# Abstraction, polymorphism, Encapsulation, Inheritance
class LegacyRegisterOffice implements RegisterOffice
{
    private array $people = [];

    public function __construct(private IdentifierFactory $idFactory) {}

    public function register(Person $person): PersonalIdentifier
    {
        // $random = (string) mt_rand(100, 1000) . chr(mt_rand(98, 150));
        $id = $this->idFactory->create();
        $this->people []= new IdentifiedPerson($id, $person->name());
        return $id;
    }

    public function changeName(PersonalIdentifier $id, string $newName): void
    {
        foreach ($this->people as $index => $person) {
            if ($id->value() === $person->id()->value()) {
                $this->people[$index] = new IdentifiedPerson($person->id(), $newName);
                return;
            }
        }

        throw new PersonNotFound;
    }

    public function people(): array
    {
        return $this->people;
    }
}


// index.php


// loosly couple -> test
$regsitry = new LegacyRegisterOffice(new RandomIdentifierFactory);
$id = $regsitry->register(new Person('John doe'));
$regsitry->changeName(new PersonalIdentifier('asldjflkjdf'), 'Acme');
// $regsitry->changeName(new PersonalIdentifier('asldjflkjdf'), 'Acme');

var_dump($regsitry->people());

// Electronic register office -> 1 time name changer

spl_autoload_register(function (string $class) {

});

// Malltina\App\Resources\Post::class =>  require [$ROOT . '/app/resources/'. $classname . '.php'];

// require
// Composer
