using System;

public class Person
{
	//Attribute
	private string name;

	//Konstruktor
	public Person()
	{
		this.name = "";
	}

	public Person(string name)
	{
		this.name = name;
	}

	//Methoden
	public string GetName()
	{
		Return this.name;
	}

	public void SetName(string name)
	{
		this.nachname = name;
	}

	//Ausgabe
	public void PrintInfo()
	{
		Console.WriteLine (this.name);
	}
}