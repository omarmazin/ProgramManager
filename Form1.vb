Imports System.Net, System.Text.RegularExpressions
Public Class Form1
    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Dim web As New WebClient
        Dim res As String = web.DownloadString("http://localhost/Prog%20manager/api.php")
        Dim reg As String = Regex.Match(res, My.Resources.String1).Groups(1).Value
        Label1.Text = reg
    End Sub
End Class
