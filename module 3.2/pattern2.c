# include<stdio.h>
int main()
{
    char count='A';
    for (char i = 'A'; i < 'F'; i++)
    {
        for (char j = 'A'; j <=i; j++)
        {
            printf("%c ",count);
            count++;
        }
        printf("\n");
    }
    
    return 0;
}