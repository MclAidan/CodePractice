//This is a program that approximates pi using only random numbers

#include <stdio.h> 
#include <stdlib.h> 
#include <time.h>

int main()
{
long long itt = 100000; //Itteration counter
long long count = 0;
long p = RAND_MAX;

srand(time(0)); //Seed

for (long long i = itt; i>0; --i)
{
	long  int1 = rand(); long  int2 = rand(); // Random numbers are cast as cordinates

	if ((int2 * int2) + (int1 * int1) <= p*p ) // Check if in cicle
	{
		count = count + 1;
	}
}
double res = (double)count / (double)itt *4; //Solve for pi
printf("%lf\n",res );
}
