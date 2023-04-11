#include<stdio.h>
int main()
{
    int arr1[2][2],arr2[2][2],result[2][2],sum=0;
    printf("enter values of 1st matrix :\n");
    for (int i = 0; i < 2; i++)
    {
        for (int j = 0; j < 2; j++) 
        {
            printf("%d %d : ",i,j);
            scanf("%d",&arr1[i][j]);
        }
    }
    printf("enter values of 2nd matrix :\n");
    for (int i = 0; i < 2; i++)
    {
        for (int j = 0; j < 2; j++)
        {
            printf("%d %d : ",i,j);
            scanf("%d",&arr2[i][j]);
        }
    }
    printf("\nAddition of two matrix : \n");
    for (int i = 0; i < 2; i++)
    {
        for (int j = 0; j < 2; j++)
        {
            printf("%d  ",arr1[i][j] + arr2[i][j] );
            
        }
        printf("\n");
    }
    printf("Subtraction of two matrix : \n");
    for (int i = 0; i < 2; i++)
    {
        for (int j = 0; j < 2; j++)
        {
            printf("%d  ",arr1[i][j] - arr2[i][j] );
            
        }
        printf("\n");
    }
    printf("multiplication of two matrix :\n");
    for (int i = 0; i <2; i++)
    {
        for (int j = 0; j < 2; j++)
        {
            for (int k = 0; k < 2; k++)
            {
                sum += arr1[i][k]*arr2[k][j];
            }
            result[i][j]=sum;
            sum=0;
        }
    }
        for (int i = 0; i < 2; i++)
        {
            for (int j = 0; j < 2; j++)
            {                          
                 printf("%d  ",result[i][j]);
            }
            printf("\n");
        }        
 
   
    return 0;
}