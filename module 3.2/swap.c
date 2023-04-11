# include<stdio.h>
int main()
{
    int a,b;
    printf("before swap : \n");
    printf("enter value of a = ");
    scanf("%d",&a);
    printf("enter value of b = ");
    scanf("%d",&b);
    printf("after swap : \n");
    a=a+b;
    b=a-b;
    a=a-b;
    printf("a = %d\n",a);
    printf("b = %d",b);
    return 0;
}