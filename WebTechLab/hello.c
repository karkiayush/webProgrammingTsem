#include <stdio.h>
#include <stdlib.h>

struct node
{
    int info;
    struct node *next;
};
struct node *head = NULL;
struct node *top = NULL;
struct node *ptr = NULL;

void push();
void pop();
void display();

int main()
{
    int choice;
    while (1)
    {
        printf("\nEnter \n\t1 for PUSH \n\t2 for POP \n\t3 for DISPLAY \n\t4 for EXIT: ");
        scanf("%d", &choice);

        switch (choice)
        {
        case 1:
            push();
            break;
        case 2:
            pop();
            break;
        case 3:
            display();
            break;
        case 4:
            exit(0);
        default:
            printf("\nInvalid choice...");
        }
    }

    return 0;
}

void push()
{
    int data;
    // create a node
    struct node *newnode = NULL;
    newnode = (struct node *)malloc(sizeof(struct node));
    // check if newnode is created or not
    if (newnode == NULL)
    {
        printf("\nSomething went wrong... No Node is created...");
    }
    // read and assign data to info field of newnode and set next to null
    printf("\nEnter data to be inserted: ");
    scanf("%d", &data);
    newnode->info = data;
    newnode->next = NULL;
    // empty list insertion
    if (head == NULL)
    {
        head = newnode;
        top = newnode;
    }
    else
    {
        top->next = newnode;
        top = newnode;
    }
}

void pop()
{
    ptr = head;
    if (head == NULL)
    {
        printf("\nList is empty");
    }
    else if (top == head)
    {
        free(top);
        top = NULL;
        head = NULL;
    }
    else
    {
        while (ptr->next != top)
        {
            ptr = ptr->next;
        }
        free(top);
        top = ptr;
        ptr->next = NULL;
    }
}

void display()
{
    ptr = head;
    printf("\nThe elements on the stack are: \n");
    if (head == NULL)
    {
        printf("\nList is empty");
    }
    else if (top == head)
    {
        printf("%d\t", ptr->info);
    }
    else
    {
        while (ptr->next != NULL)
        {
            printf("%d\t", ptr->info);
            ptr = ptr->next;
        }
        printf("%d\t", ptr->info);
    }
}