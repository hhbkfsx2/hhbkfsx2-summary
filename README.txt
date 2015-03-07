README: Hilfen und Anweisungen -------------------- K. Engelhardt --- 20.01.2015
================================================================================
In diesem README werden einige Hilfen, wie beispielsweise LaTeX-Befehle aufgelistet, die ihr verwenden könnt, um eure Beiträge zur Zusammenfassung zu strukturieren. Falls ihr noch nicht wisst, worum es sich bei LaTeX handelt, empfehle ich zuerst den Wikipedia-Artikel zu lesen. Des Weiteren finden sich
hier Arbeitsanweisungen, bespw. bezüglich der Verwendung von Bildern.
================================================================================
Inhaltsverzeichnis
	(1) Verwendung von Bildern
	(2) LaTeX-Befehle
		(2.1) Text-Formatierung
		(2.2) Überschriften
		(2.3) Tabellen
		(2.4) Quell-Code einbinden
================================================================================
(1) Verwendung von Bildern:

	Wer der Zusammenfassung Bilder hinzufügen möchte, fügt diese nach dem
Namensschema "lf0x-bildname.jpg/png/svg..." unter pictures dem jeweiligen
Lernfeld hinzu. Dabei ist zu beachten, dass die Quelle des Bildes unter pictures
in der Datei quellen.txt dokumentiert wird!
================================================================================
(2) LaTeX-Befehle

(2.1) Text-Formatierung
	Fett:		\textbf{Dieser Text wird fett dargestellt}
			{\bf Dieser Text wird fett dargestellt

	Kursiv:		\textit{Dieser Text wird kursiv dargestellt
			{\it Dieser Text wird kursiv dargestellt}

	Alternativ:	\emph{Dieser Text wird vom Rest abgesetzt}
			#emphazise; TeX wählt je nach Umgebung eine Art der
			Hervorhebung aus.
================================================================================
(2.2) Überschriften:
	1. Ordnung	\section{Überschrift}
	1.1 Ordnung	\subsection{Überschrift}
	1.1.1 Ordnng	\subsubsection{Überschrift}

	Paragraph	\paragraph{}
	Sub-Paragraph	\subparagraph{}
	#Paragraphen werden nicht ohne weiteres im Inhaltsverzeichnis gelistet

	Um einen Zeilenumbruch nach einem Paragraphen zu erzwingen, muss nach
	der schließenden Klammer "~\\" geschrieben werden; \paragraph{}~\\.
================================================================================
(2.3) Tabellen:
Der Code ...
	\begin{tabular}{l|l|l}
		Test & Test & Test\\
		Test & Test & Test\\
	\end{tabular}
erzeugt folgende Tabelle:
	+------+------+------+
	| Test | Test | Test |
	| Test | Test | Test |
	+------+------+------+
Die Anzahl der l-s gibt die Anzahl der Spalten wieder; alternativ r oder c
Ein "\hline" zwischen den beiden "Test"-Zeilen würde eine horizontale Linie
in der Tabelle bewirken. Werden zwischen den l-s die Pipes (|) weggelassen, 
so gibt es zwischen den Wörtern "Test" keine Trennlinie.
- "&" bezeichnet einen "Spalten-Sprung"
================================================================================
(2.4) Quell-Code einbinden
	\begin{lstlisting}
		Alles, was in diesem Bereich steht, wird von Texmaker nicht
		interpretiert, sondern genau so ausgegeben, wie es hier
		steht. Mit TABs sollte vorsichtig umgegangen werden. Stattdessen
		-- und konträr zur Praxis! -- besser Leerzeichen verwenden.
	\end{lstlisting}
Besser: (Beispiel!)
	\lstinputlisting
		[caption={Ein rudimentäres HTML-Beispiel}
		\label{lst:HTML-Beispiel},
		captionpos=t,language=HTML]
		{beispiel.html}
Es können auch externe Dateien -- hier "beispiel.html" eingebunden werden.
Dadurch bleiben die Dateien getrennt und leichter zu überschauen. Wer Quell-Code
einbinden möchte: http://en.wikibooks.org/wiki/LaTeX/Source_Code_Listings
================================================================================
