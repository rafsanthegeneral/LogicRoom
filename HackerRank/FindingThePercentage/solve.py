
def solve(student_marks,query_name):
    print (student_marks)
    print (type(student_marks))
    



if __name__ == '__main__':
    n = int(input())
    student_marks = {}
    for _ in range(n):
        name, *line = input().split()
        scores = list(map(float, line))
        student_marks[name] = scores
    query_name = input()
    solve(student_marks,query_name)