README: Wichtige LaTeX-Befehle -------------------- K. Engelhardt --- 20.01.2015
================================================================================
In diesem README werden einige LaTeX-Befehle aufgelistet, die ihr verwenden
könnt, um eure Beiträge zur Zusammenfassung zu strukturieren.
Falls ihr noch nicht wisst, worum es sich bei LaTeX handelt, empfehle ich zuerst
den Wikipedia-Artikel zu lesen.
================================================================================
Inhaltsverzeichnis	
	(1) Text-Formatierung
	(2) Überschriften
	(3) Tabellen
	(4) Quell-Code einbinden
================================================================================
(1) Text-Formatierung
	Fett:		\textbf{Dieser Text wird fett dargestellt}
			{\bf Dieser Text wird fett dargestellt

	Kursiv:		\textit{Dieser Text wird kursiv dargestellt
			{\it Dieser Text wird kursiv dargestellt}

	Alternativ:	\emph{Dieser Text wird vom Rest abgesetzt}
			#emphazise; TeX wählt je nach Umgebung eine Art der
			Hervorhebung aus.
================================================================================
(2) Überschriften:
	1. Ordnung	\section{Überschrift}
	1.1 Ordnung	\subsection{Überschrift}
	1.1.1 Ordnng	\subsubsection{Überschrift}

	Paragraph	\paragraph{}
	Sub-Paragraph	\subparagraph{}
	#Paragraphen werden nicht ohne weiteres im Inhaltsverzeichnis gelistet

	Um einen Zeilenumbruch nach einem Paragraphen zu erzwingen, muss nach
	der schließenden Klammer "~\\" geschrieben werden; \paragraph{}~\\.
================================================================================
(3) Tabellen:
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
(4) Quell-Code einbinden
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
