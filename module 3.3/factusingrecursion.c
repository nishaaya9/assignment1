#include<stdio.h>
int fact(int);    //function declaration
int main()
{
    int n,f;
    printf("enter a number : ");
    scanf("%d",&n);
    f=fact(n);   //function call
    printf("factorial = %d",f);

}
int fact(int n)
{
    if(n<2)
        return 1;
    else
        return n*fact(n-1);  //recursive
}