using System;

namespace kleines1x1_v1
{
 class kleines1x1
 {
  public static void Main (string[] args)
  {
   int zeile;
   int spalte;
   int ergebnis;

   for (zeile = 1; zeile <= 10; zeile++)
   {
    for (spalte = 1; spalte <= 10; spalte++)
    {
     ergebnis = zeile * spalte;
     if (ergebnis < 10)
     {
      Console.Write(0);
     }
     Console.Write(ergebnis+" ");
    }
    Console.WriteLine();
   }
  }
 }
}
