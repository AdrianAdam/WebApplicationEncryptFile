<!DOCTYPE html>
<html>
<body>

<?php
$file=fopen("Decript.txt","r");

while(false !==($char = fgetc($file)))
{
	switch($char)
	{
		case 'm':
			echo 'a';
			break;
		case 'l':
			echo 'b';
			break;
		case 'p':
			echo 'c';
			break;
		case 'n':
			echo 'd';
			break;
		case 'k':
			echo 'e';
			break;
		case 'o':
			echo 'f';
			break;
		case 'b':
			echo 'g';
			break;
		case 'j':
			echo 'h';
			break;
		case 'i':
			echo 'i';
			break;
		case 'v':
			echo 'j';
			break;
		case 'h':
			echo 'k';
			break;
		case 'u':
			echo 'l';
			break;
		case 'c':
			echo 'm';
			break;
		case 'g':
			echo 'n';
			break;
		case 'y':
			echo 'o';
			break;
		case 'x':
			echo 'p';
			break;
		case 'f':
			echo 'q';
			break;
		case 't':
			echo 'r';
			break;
		case 'z':
			echo 's';
			break;
		case 'd':
			echo 't';
			break;
		case 'r':
			echo 'u';
			break;
		case 's':
			echo 'v';
			break;
		case 'e':
			echo 'w';
			break;
		case 'a':
			echo 'x';
			break;
		case 'w':
			echo 'y';
			break;
		case 'q':
			echo 'z';
			break;
		case ',':
			echo '1';
			break;
		case '<':
			echo '2';
			break;
		case '.':
			echo '3';
			break;
		case '>':
			echo '4';
			break;
		case '/':
			echo '5';
			break;
		case '?':
			echo '6';
			break;
		case ';':
			echo '7';
			break;
		case ':':
			echo '8';
			break;
		case '[':
			echo '9';
			break;
		case '`':
			echo '0';
			break;
		case '{':
			echo ',';
			break;
		case ']':
			echo '<';
			break;
		case '}':
			echo '.';
			break;
		case '|':
			echo '>';
			break;
		case '=':
			echo '/';
			break;
		case '+':
			echo '?';
			break;
		case '-':
			echo ';';
			break;
		case '_':
			echo ':';
			break;
		case '9':
			echo '{';
			break;
		case '8':
			echo ']';
			break;
		case '7':
			echo '}';
			break;
		case '6':
			echo '|';
			break;
		case '5':
			echo '+';
			break;
		case '4':
			echo '-';
			break;
		case '3':
			echo '_';
			break;
		case '2':
			echo '|';
			break;
		case '1':
			echo ')';
			break;
		case '0':
			echo '(';
			break;
		case ')':
			echo '*';
			break;
		case '(':
			echo '&';
			break;
		case '*':
			echo '^';
			break;
		case '&':
			echo "<br>";
			break;
		case '^':
			echo '$';
			break;
		case '#':
			echo '@';
			break;
		case '@':
			echo '!';
			break;
		case '!':
			echo "<br>";
			break;
		case '%':
			echo "\n";
			break;
		case 'M':
			echo 'A';
			break;
		case 'L':
			echo 'B';
			break;
		case 'P':
			echo 'C';
			break;
		case 'N':
			echo 'D';
			break;
		case 'K':
			echo 'E';
			break;
		case 'O':
			echo 'F';
			break;
		case 'B':
			echo 'G';
			break;
		case 'J':
			echo 'H';
			break;
		case 'I':
			echo 'I';
			break;
		case 'V':
			echo 'J';
			break;
		case 'H':
			echo 'K';
			break;
		case 'U':
			echo 'L';
			break;
		case 'C':
			echo 'M';
			break;
		case 'G':
			echo 'N';
			break;
		case 'Y':
			echo 'O';
			break;
		case 'X':
			echo 'P';
			break;
		case 'F':
			echo 'Q';
			break;
		case 'T':
			echo 'R';
			break;
		case 'Z':
			echo 'S';
			break;
		case 'D':
			echo 'T';
			break;
		case 'R':
			echo 'U';
			break;
		case 'S':
			echo 'V';
			break;
		case 'E':
			echo 'W';
			break;
		case 'A':
			echo 'X';
			break;
		case 'W':
			echo 'Y';
			break;
		case 'Q':
			echo 'Z';
			break;
		case '$':
			echo '`';
			break;
		case '~':
			echo ' ';
			break;
	}
}

?>
</body>
</html>
