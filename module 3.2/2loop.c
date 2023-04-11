#include <stdio.h>
int main()
{
    int i,number[10],even=0,odd=0,sumeven=0,sumodd=0;
    printf("enter 10 numbers : ");
    for (i = 0; i < 10; i++)
    {
        scanf("%d",&number[i]);
    
        if (number[i]%2==0)
        {
            even++;
            sumeven=sumeven+number[i];
        }
        else
        {
            odd++;
            sumodd=sumodd+number[i];
        }      
        
    }    
        printf("\nEven numbers are  %d\n",even);
        printf("Odd numbers are  %d\n",odd);
        printf("\nSum of even numbers are %d\n",sumeven);
        printf("Sum of odd numbers are %d",sumodd);

    return 0;
}

