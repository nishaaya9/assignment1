#include<stdio.h>
int main()
{
    int n,sum,last;
    printf("enter numbers : ");
    scanf("%d",&n);
    last=n%10;
    while (n>1)
    {
        n=n/10;
    }
    sum=n+last;
    printf("sum of first and last digit = %d",sum);
return 0;
}