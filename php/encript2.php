<!DOCTYPE html>
<html>
<body>

<?php
$file=fopen("Demonstration.txt","r");

while(false !==($char = fgetc($file)))
{
	switch($char)
	{
		case 'a':
			echo 'm';
			break;
		case 'b':
			echo 'l';
			break;
		case 'c':
			echo 'p';
			break;
		case 'd':
			echo 'n';
			break;
		case 'e':
			echo 'k';
			break;
		case 'f':
			echo 'o';
			break;
		case 'g':
			echo 'b';
			break;
		case 'h':
			echo 'j';
			break;
		case 'i':
			echo 'i';
			break;
		case 'j':
			echo 'v';
			break;
		case 'k':
			echo 'h';
			break;
		case 'l':
			echo 'u';
			break;
		case 'm':
			echo 'c';
			break;
		case 'n':
			echo 'g';
			break;
		case 'o':
			echo 'y';
			break;
		case 'p':
			echo 'x';
			break;
		case 'q':
			echo 'f';
			break;
		case 'r':
			echo 't';
			break;
		case 's':
			echo 'z';
			break;
		case 't':
			echo 'd';
			break;
		case 'u':
			echo 'r';
			break;
		case 'v':
			echo 's';
			break;
		case 'w':
			echo 'e';
			break;
		case 'x':
			echo 'a';
			break;
		case 'y':
			echo 'w';
			break;
		case 'z':
			echo 'q';
			break;
		case '1':
			echo ',';
			break;
		case '2':
			echo '<';
			break;
		case '3':
			echo '.';
			break;
		case '4':
			echo '>';
			break;
		case '5':
			echo '/';
			break;
		case '6':
			echo '?';
			break;
		case '7':
			echo ';';
			break;
		case '8':
			echo ':';
			break;
		case '9':
			echo '[';
			break;
		case '0':
			echo '`';
			break;
		case ',':
			echo '{';
			break;
		case '<':
			echo ']';
			break;
		case '.':
			echo '}';
			break;
		case '>':
			echo '|';
			break;
		case '/':
			echo '=';
			break;
		case '?':
			echo '+';
			break;
		case ';':
			echo '-';
			break;
		case ':':
			echo '_';
			break;
		case '{':
			echo '9';
			break;
		case ']':
			echo '8';
			break;
		case '}':
			echo '7';
			break;
		case '=':
			echo '6';
			break;
		case '+':
			echo '5';
			break;
		case '-':
			echo '4';
			break;
		case '_':
			echo '3';
			break;
		case '|':
			echo '2';
			break;
		case ')':
			echo '1';
			break;
		case '(':
			echo '0';
			break;
		case '*':
			echo ')';
			break;
		case '&':
			echo '(';
			break;
		case '^':
			echo '*';
			break;
		case '%':
			echo '&';
			break;
		case '$':
			echo '^';
			break;
		case '@':
			echo '#';
			break;
		case '!':
			echo '@';
			break;
		case 'A':
			echo 'M';
			break;
		case 'B':
			echo 'L';
			break;
		case 'C':
			echo 'P';
			break;
		case 'D':
			echo 'N';
			break;
		case 'E':
			echo 'K';
			break;
		case 'F':
			echo 'O';
			break;
		case 'G':
			echo 'B';
			break;
		case 'H':
			echo 'J';
			break;
		case 'I':
			echo 'I';
			break;
		case 'J':
			echo 'V';
			break;
		case 'K':
			echo 'H';
			break;
		case 'L':
			echo 'U';
			break;
		case 'M':
			echo 'C';
			break;
		case 'N':
			echo 'G';
			break;
		case 'O':
			echo 'Y';
			break;
		case 'P':
			echo 'X';
			break;
		case 'Q':
			echo 'F';
			break;
		case 'R':
			echo 'T';
			break;
		case 'S':
			echo 'Z';
			break;
		case 'T':
			echo 'D';
			break;
		case 'U':
			echo 'R';
			break;
		case 'V':
			echo 'S';
			break;
		case 'W':
			echo 'E';
			break;
		case 'X':
			echo 'A';
			break;
		case 'Y':
			echo 'W';
			break;
		case 'Z':
			echo 'Q';
			break;
		case ' ':
			echo '~';
			break;
		case '`':
			echo '$';
			break;
		case "\n":
			echo '%';
			echo "\n";
			break;
		case "\r":
			echo '!';
			echo "\r";
			break;
	}	
}

?>
</body>
</html>
