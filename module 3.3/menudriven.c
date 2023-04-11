#include <stdio.h>
int main() 
{
    printf("1. Addition\n");
    printf("2. Subtraction\n");
    printf("3. Multiplication\n");
    printf("4. Division\n\n");
    
    int i,choice,num1,num2,add,sub,mul;
    float div;
    while (choice!=5)
    {
          
    printf("Enter your choice : ");
    scanf("%d",&choice);

    switch (choice)
    {
    case 1:
        printf("enter num1 and num2 : ");
        scanf("%d %d",&num1,&num2);
        add=num1+num2;
        printf("your addition is %d\n",add);
        break;
    case 2:
        printf("enter num1 and num2 : ");
        scanf("%d %d",&num1,&num2);
        sub=num1-num2;
        printf("your subtraction is %d\n",sub);
        break;
    case 3:
        printf("enter num1 and num2 : ");
        scanf("%d %d",&num1,&num2);
        mul=num1*num2;
        printf("your multiplication is %d\n",mul);
        break;
    case 4:
        printf("enter num1 and num2 : ");
        scanf("%d %d",&num1,&num2);
        div=(float)num1/(float)num2;
        printf("your division is %.2f\n",div);
        break;
    case 5:
        printf("exit");
        break;
   
    }
    
    }
  return 0;
}
