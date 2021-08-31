#include <stdio.h> 
#include <stdlib.h> 
#include <time.h>

int main()
{
long long itt = 100000;long long count = 0;
long p = RAND_MAX;

srand(time(0));

for (long long i = itt; i>0; --i)
{
	long  int1 = rand(); long  int2 = rand();

	if ((int2 * int2) + (int1 * int1) <= p*p )
	{
		count = count + 1;
	}
}
double res = (double)count / (double)itt *4;
printf("%lf\n",res );
}