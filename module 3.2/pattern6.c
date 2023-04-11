# include<stdio.h>
int main()
{
    for (char i = 'A'; i < 'F'; i++)
    {
        for (char j = 'A'; j <= i; j++)
        {
            printf("%c ",j);
        }
        printf("\n");
    }    
    return 0;
}