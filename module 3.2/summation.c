#include<stdio.h>
int main()
{ 
    int n[5],sum=0;
    printf("enter the numbers : ");
    for (int i = 1; i <=5; i++)
    {
        scanf("%d",&n[i]);
    }
    
    for (int i = 1; i <=5 ; i++)
    {
       sum+=i;
    }
    printf("sum of numbers is %d",sum);
return 0;
}