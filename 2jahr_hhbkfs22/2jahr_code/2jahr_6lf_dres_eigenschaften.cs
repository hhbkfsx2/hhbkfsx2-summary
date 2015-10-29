public Int16 Kosten
{
	set
	{
		if (value < 10)
		{
			hersteller = value;
		}
	}
	get
	{
		return hersteller;
	}
}