# include<stdio.h>
int main()
{
    int count=1;
    for (int i = 1; i < 6; i++)
    {
        for (int j = 1; j <=i; j++)
        {
            printf("%d ",count);
            count++;
        }
        printf("\n");
        
    }
    
    return 0;
}