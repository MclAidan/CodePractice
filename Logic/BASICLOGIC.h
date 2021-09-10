#ifndef BASICLOGIC_H_
#define BASICLOGIC_H_

int BUFFER(int in)
	{
		if(in == 0)
		{
			return 0;
		}
	
		else
		{
			return 1;
		}
	}	
//////////////////////////////

int NOT(int in)
	{
		if(in == 0)
			{
				return 1;
			}
	
		else
			{
				return 0;
			}
	}
//////////////////////////////

int AND(int in1, int in2)
{
	if (in1 && in2 == 1)
	{
		return 1;
	}
	
	else
	{
		return 0;
	}
}


//////////////////////////////

int NAND(int in1, int in2)
{
	if (in1 && in2 == 1)
	{
		return 0;
	}
	
	else
	{
		return 1;
	}
}
//////////////////////////////

int OR(int in1, int in2)
{
	if (in1 || in2 == 1)
	{
		return 1;
	}
	
	else
	{
		return 0;
	}
}
//////////////////////////////

int NOR(int in1, int in2)
{
	if (in1 || in2 == 1)
	{
		return 0;
	}
	
	else
	{
		return 1;
	}
}
//////////////////////////////

int XOR(int in1, int in2)
{
	if (in1 || in2 == 1 && in1 || in2 == 0)
	{
		return 0;
	}
	
	else
	{
		return 1;
	}
}

//////////////////////////////

int XNOR(int in1, int in2)
{
	if (in1 || in2 == 1 && in1 || in2 == 0)
	{
		return 1;
	}
	
	else
	{
		return 0;
	}
}

#endif
