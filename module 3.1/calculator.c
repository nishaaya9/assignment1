# include<stdio.h>
int main()
{
    int num1,num2,add,sub,mul,mod;
    float div;
    printf("enter num1 and num2 : ");
    scanf("%d %d",&num1,&num2);
    add=num1+num2;
    sub=num1-num2;   
    mul=num1*num2;    
    div=(float)num1/(float)num2;    
    mod=num1%num2;
    printf("your addition is %d\n",add);
    printf("your subtraction is  %d\n",sub);
    printf("your multiplication is  %d\n",mul);
    printf("your division is  %.2f\n",div);
    printf("your modulo is  %d\n",mod);
    return 0;
}