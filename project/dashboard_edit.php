<form method="post" action="update_profile.php">
  <h3>Update Your Info</h3>
  <label>Name:</label><br>
  <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required /><br><br>

  <label>Email:</label><br>
  <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required /><br><br>

  <label>New Password:</label><br>
  <input type="password" name="new_password" placeholder="Leave blank to keep current" /><br><br>

  <button type="submit" style="
  margin-top: 16px;
  background-color: #5F00FF;
  color: white;
  border: none;
  padding: 12px 20px;
  border-radius: 8px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.3s ease;
">Save Changes</button>
</form>