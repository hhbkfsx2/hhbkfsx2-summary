README: Hilfen und Anweisungen -------------------- K. Engelhardt --- 20.01.2015
================================================================================
In diesem README werden einige Hilfen, wie beispielsweise LaTeX-Befehle
aufgelistet, die ihr verwenden könnt, um eure Beiträge zur Zusammenfassung zu
strukturieren. Falls ihr noch nicht wisst, worum es sich bei LaTeX handelt,
empfehle ich zuerst den Wikipedia-Artikel zu lesen. Des Weiteren finden sich
hier Arbeitsanweisungen, bespw. bezüglich der Verwendung von Bildern.
================================================================================
Inhaltsverzeichnis

	(1) Verwendung von Bildern
	(2) LaTeX-Befehle
		(2.1) Text-Formatierung
		(2.2) Überschriften
		(2.3) Tabellen
		(2.4) Quellcode einbinden
		(2.5) Tabs verwenden
		(2.6) Anführungszeichen
		(2.7) Abstände in Itemize
	(3) Strukturierung von Sections
================================================================================
(1) Verwendung von Bildern:

	Wer der Zusammenfassung Bilder hinzufügen möchte, fügt diese nach dem
Namensschema "lf0x-bildname.jpg/png/svg..." unter pictures dem jeweiligen
Lernfeld hinzu (Kleinschreibung beachten). Dabei ist zu beachten, dass die
Quelle des Bildes unter pictures in der Datei quellen.txt dokumentiert wird!
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
(2.4) Quellcode einbinden

	\begin{lstlisting}
		Alles, was in diesem Bereich steht, wird von Texmaker nicht
		interpretiert, sondern genau so ausgegeben, wie es hier
		steht. Mit TABs sollte vorsichtig umgegangen werden. Stattdessen
		-- und konträr zur Praxis! -- besser Leerzeichen verwenden.
	\end{lstlisting}
Besser: (Beispiel!)
	\lstinputlisting
		[basicstyle=\small,				#Schriftgröße
		showstringspaces=false,				#!Whitespaces
		caption={Indexadressierte Arrays in PHP},	
		\label{lst:beispiel},				
		captionpos=b,					#Zentriert
		language=PHP]					#Programmierspr
		{path/to/beispiel.php}				#Pfad

	\lstinputlisting
		[caption={Beispiel zu Classful Networking}
		\label{lst:7lf_classful.example}
		basicstyle=\small,
		captionpos=b]
		{2jahr_code/2jahr_7lf_classful.example.txt}

Es können auch externe Dateien -- hier "beispiel.html" eingebunden werden.
Dadurch bleiben die Dateien getrennt und leichter zu überschauen. Wer Quell-Code
einbinden möchte: http://en.wikibooks.org/wiki/LaTeX/Source_Code_Listings

Möglichkeit, Quellcode inline einzubinden: Manchmal möchte man kurze Befehle
direkt in einer Zeile einbinden. Dafür gibt es eine einfache Möglichkeit.
Bsp.:	Der \verb+\LaTeX+--Befehl erzeugt das {\LaTeX}--Logo
Nach dem Befehl \verb wird ein Zeichen angegeben, welches den Anfang und das
Ende des Quellcodes definiert. Statt + kann nahezu jeder beliebige Zeichen
verwendet werden. Alles zwischen diesen Zeichen wird nicht interpretiert.	
================================================================================
(2.5) Tabs verwenden

Mit der Umgbung tabular lassen sich auch Tabs verweden:

\begin{tabular}{lll}		Output:	
1 & 2 & 3\\			1	2	3
4 & 5 & 6			4	5	6
\end{tabular}
================================================================================
(2.6) Anführungszeichen

Anführungszeichen unten links: \ql
Anführungszeichen oben rechts: \qr

Bsp.: \ql Anführungszeichen\qr

Wenn nach dem rechten Anführungszeichen ein Leezeichen folgen soll, dann muss
dieses durch einen Backslash erzwungen werden: \ql Anführungszeichen\qr\

================================================================================
(2.7) Abstände in Itemize

Durch den Befehl \setlength\itemsep{0em} lässt sich der Abstand zwischen den
Bulletpoints innerhalb von Itemize regulieren. Mit dem Wert 0em wird ein
einfacher Zeilenabstand genutzt.

\begin{itemize}
\setlength\itemsep{0em}
	\item Beispiel 1
	\item Beispiel 2
\end{itemize}

================================================================================
(3) Strukturierung von Sections
	
	In diesem Abschnitt wird beschrieben, wie die Sections strukturiert
werden sollen, damit sich jeder in den - durchaus längeren - Sections zurecht
findet. Vor jeden Abschnitt wird ein Kommentar gesetzt und nach jedem Abschnitt.
Dadurch soll sichergestellt werden, dass jeder sofort weiß, wo er sich befindet.
Um nicht unnötig viel zu beschreiben, folgt nun ein schematisches Beispiel:

%%% Anfang: Beispiel
\section{Beispiel}

%%% Anfang: Beispiel > Subsection1
\subsection{Subsection1}

%%% Anfang: Beispiel > Subsection2
\subsection{Subsection2}	

%%% Ende: Beispiel
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

Vor allem durch die 80* %-Zeichen wird eine optische Trennung der Sections
erreicht. Weitere Beispiele lassen sich in den Sections finden.
---
* 80: "In der Vergangenheit konnten gängige Terminals nur 80 Zeichen pro Zeile
darstellen." Siehe auch: http://de.wikipedia.org/wiki/Kammquoting
================================================================================
