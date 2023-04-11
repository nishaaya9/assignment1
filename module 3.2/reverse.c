# include<stdio.h>
int main()
{
    int num,reverse;
    printf("enter number : ");
    scanf("%d",&num);
    printf("reverse = ");
    while (num>0)
    {
        reverse=num%10;
        printf("%d",reverse);
        num=num/10;    
    }  
    
    return 0;
}