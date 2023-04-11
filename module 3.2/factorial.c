# include<stdio.h>
int main()
{
    int num,i,f=1;
    printf("enter a number to find factorial : ");
    scanf("%d",&num);
    for ( i = 1; i <=num; i++)    
    {
        f=f*i;
    }
        printf("factorial of given number is %d\n",f);
    
    return 0;
}