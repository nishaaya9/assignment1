#include <stdio.h>
int main()
{
    int num;
    printf("to cheak number is odd or even....\n");
    printf("enter number : ");
    scanf("%d", &num);
    num % 2 == 0 ? printf("number is even") : printf("number is odd");
    return 0;
}